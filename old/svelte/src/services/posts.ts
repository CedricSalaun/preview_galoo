const URL = 'http://localhost:8888/wp-json'

export async function getPost($id) {
  try {
    const response = await fetch(`${URL}/wp/v2/posts/${$id}`);
    return response.json();
  } catch(e) {
    console.error(e);
  }
}

export async function getPosts() {
  try {
    const response = await fetch(`${URL}/wp/v2/posts`);
    return response.json();
  } catch(e) {
    console.error(e);
  }
}

export async function getPostsTest({ params, fetch, session, stuff }) {
  // const url = `/blog/${params.slug}.json`;
  const url = `/blog/${params.slug}.json`;
  const res = await fetch(url);

  if (res.ok) {
    return {
      props: {
        article: await res.json()
      }
    };
  }

  return {
    status: res.status,
    error: new Error(`Could not load ${url}`)
  };
}

// Declaration types for Endpoints
// * declarations that are not exported are for internal use

// type of string[] is only for set-cookie
// everything else must be a type of string
type ResponseHeaders = Record<string, string | string[]>;
type RequestHeaders = Record<string, string>;

export type RawBody = null | Uint8Array;

// type ParameterizedBody<Body = unknown> = Body extends FormData ? ReadOnlyFormData : (string | RawBody | ReadOnlyFormData) & Body;
type ParameterizedBody<Body = unknown> = (string | RawBody) & Body;

export interface Request<Locals = Record<string, any>, Body = unknown> {
  url: URL;
  method: string;
  headers: RequestHeaders;
  rawBody: RawBody;
  params: Record<string, string>;
body: ParameterizedBody<Body>;
locals: Locals;
}

type DefaultBody = any | Uint8Array;
export interface EndpointOutput<Body extends DefaultBody = DefaultBody> {
  status?: number;
  headers?: ResponseHeaders;
  body?: Body;
}

export interface RequestHandler<
  Locals = Record<string, any>,
  Input = unknown,
  Output extends DefaultBody = DefaultBody
  > {
  (request: Request<Locals, Input>): | void | EndpointOutput<Output> | Promise<void | EndpointOutput<Output>>;
}

// /** @type {import('@sveltejs/kit').RequestHandler} */
export async function get({ params }) {
  // the `slug` parameter is available because this file
  // is called [slug].json.js
  const { slug } = params;
  console.log(slug);

  // const article = await db.get(slug);

  // if (article) {
  //   return {
  //     body: {
  //       article
  //     }
  //   };
  // }
}
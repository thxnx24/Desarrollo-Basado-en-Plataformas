from ariadne import ObjectType, gql, make_executable_schema
from ariadne.asgi import GraphQL

type_defs = gql(
    """
    type Query {
        hello: String!
    }
    """
) 

query_type = ObjectType("Query")

@query_type.field("hello")
def resolve_hello(*_):
    return "Hello World"

schema = make_executable_schema(type_defs, query_type)

app = GraphQL(schema, debug=True)

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)

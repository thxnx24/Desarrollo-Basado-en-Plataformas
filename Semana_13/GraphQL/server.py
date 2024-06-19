from flask import Flask, request, jsonify, redirect
from ariadne import QueryType, make_executable_schema, graphql_sync

# Definir el esquema GraphQL
type_defs = """
    type Query {
        hello: String!
    }
"""

# Definir los resolvers
query = QueryType()

@query.field("hello")
def resolve_hello(_, info):
    return "Hello, world!"

# Crear el esquema ejecutable
schema = make_executable_schema(type_defs, query)

# Crear la aplicación Flask
app = Flask(__name__)

# Redirigir la URL raíz a GraphQL Playground
@app.route("/", methods=["GET"])
def index():
    return redirect("/graphql")

# Servir GraphQL Playground manualmente
@app.route("/graphql", methods=["GET"])
def graphql_playground():
    return '''
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset=utf-8/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GraphQL Playground</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/graphql-playground/1.7.42/static/css/index.css"
            integrity="sha512-NaFnEYd+nVDJ5nUUXbmknsoDS7D1TyCfJ3S+GBw8Tpzzv0MJHPOI8ww3BffMsj7h3zP/sdVQpW6x1aHjXxF88A=="
            crossorigin="anonymous" />
        <link rel="shortcut icon"
            href="https://cdnjs.cloudflare.com/ajax/libs/graphql-playground/1.7.42/favicon.png"
            integrity="sha512-tAQVvfeDwlLxPzSmkOm+m6UnAIb1q/o69vK8OPgyJ6uWFE2+bPgy5LUaUSZid+WTnBrGblh1TxhyAsyDZoPrw=="
            crossorigin="anonymous" />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/graphql-playground/1.7.42/static/js/middleware.js"
            integrity="sha512-c83a91dff81f9e9ffb850b9488cd7b3a78f64635668026e965ac07b96cfec8e7fd51d5660bb6b7a79thfSA=="
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="root">
            <style>
                body {
                    background-color: rgb(23, 42, 58);
                    font-family: Open Sans, sans-serif;
                    height: 90vh;
                }

                #root {
                    height: 100%;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .loading {
                    font-size: 32px;
                    font-weight: 200;
                    color: rgba(255, 255, 255, .6);
                    margin-left: 20px;
                }

                img {
                    width: 78px;
                    height: 78px;
                }

                .title {
                    font-weight: 400;
                }
            </style>
            <img src="https://graphql.org/img/logo.svg" alt="">
            <div class="loading">Loading
                <span class="title">GraphQL Playground</span>
            </div>
        </div>
        <script>
            window.addEventListener('load', function (event) {
                GraphQLPlayground.init(document.getElementById('root'), {
                    endpoint: '/graphql'
                })
            })
        </script>
    </body>

    </html>
    ''', 200

@app.route("/graphql", methods=["POST"])
def graphql_server():
    data = request.get_json()
    success, result = graphql_sync(
        schema,
        data,
        context_value=request,
        debug=app.debug
    )
    status_code = 200 if success else 400
    return jsonify(result), status_code

if __name__ == '__main__':
    # Ejecutar la aplicación Flask
    app.run(debug=True)
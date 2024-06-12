from flask import Flask
from flask_graphql import GraphQLView
import graphene

# Definir un tipo de objeto para Usuario
class Usuario(graphene.ObjectType):
    id = graphene.ID()
    nombre = graphene.String()
    email = graphene.String()

# Definir un Query con un campo "usuario" para obtener información del usuario
class Query(graphene.ObjectType):
    usuario = graphene.Field(Usuario)

    def resolve_usuario(self, info):
        # Aquí normalmente obtendrías los datos del usuario de tu base de datos o algún otro almacenamiento
        # En este ejemplo, devolvemos datos simulados
        return Usuario(id=1, nombre="Juan", email="juan@example.com")

# Crear un esquema GraphQL
schema = graphene.Schema(query=Query)

# Configurar la aplicación Flask
app = Flask(__name__)

# Agregar la vista de GraphQL a la aplicación Flask
app.add_url_rule('/graphql', view_func=GraphQLView.as_view('graphql', schema=schema, graphiql=True))

if __name__ == '__main__':
    # Ejecutar la aplicación Flask
    app.run(debug=True)

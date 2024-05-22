from flask import Flask

app = Flask(__name__)

@app.route('/')
def home():
    return 'hello world'

@app.route('/about')
def about():
    return "About page"

if __name__ == '__main__':
    app.run()

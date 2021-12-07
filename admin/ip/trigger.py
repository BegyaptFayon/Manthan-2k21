from flask import Flask, render_template, request
app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')


# @app.route('/my-link/')
# def my_link():
#     print('Fuck off!')

#     return 'IP Processed!'


@app.route('/my-data/', methods=["GET", "POST"])
def get_ip():
    if request.method == "POST":
        ip = request.form.get("ip")
        return "Your IP is: " + ip
    # return render_template("index.html")
    return "divy"


if __name__ == '__main__':
    app.run(debug=True)

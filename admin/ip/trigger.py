from flask import Flask, render_template, request
import os
import sys
app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')


@app.route('/my-data/', methods=["GET", "POST"])
def get_ip():
    if request.method == "POST":
        ip = request.form.get("ip")
        return "Your IP is: " + ip
    os.system("/bin/bash execute.sh" + ip)
    return "divy"


if __name__ == '__main__':
    app.run(debug=True)

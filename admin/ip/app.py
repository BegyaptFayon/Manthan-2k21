from flask import Flask, request, render_template, jsonify
from http import HTTPStatus
import flask

app = Flask(__name__)

file = open(
    'C:\\Users\\shubh\\Documents\\MyProjects\\manthan\\Manthan-2k21\\admin\\ip\\nmap.txt', 'r')
content = file.readlines()


@app.route('/admin/ip', methods=['GET'])
def get_ip():

    return render_template('template.html', len=len(content), content=content)
    # return render_template('template.html', content=content, mimetype='text/plain')
    # return jsonify({'data': content})


if __name__ == '__main__':
    app.run()

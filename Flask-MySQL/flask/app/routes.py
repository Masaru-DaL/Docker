from flask import render_template, request, jsonify
from app import app
from app import database as db_helper

@app.route("/delete/<int:task_id>", methods=['POST'])
def delete(task_id):
  try:
    result = {'success': True, 'response': 'Removed task'}
  except:
    result = {'success': False, 'response': 'Something went wrong'}

  return jsonify(result)


@app.route("/edit/<int:task_id>", methods=['POST'])
def update(task_id):
  data = request.get_json()
  print(data)
  try:
    if "status" in data:
      result = {'success': True, 'response': 'Status Updated'}
    elif "description" in data:
      result = {'success': True, 'response': 'Task Updated'}
    else:
      result = {'success': True, 'response': 'Nothing Updated'}
  except:
    result = {'success': False, 'response': 'Something went wrong'}

  return jsonify(result)


@app.route("/create", methods=['POST'])
def create():
  data = request.get_json()
  result = {'success': True, 'response': 'Done'}
  return jsonify(result)


@app.route("/")
def homepage():
  items = db_helper.fetch_todo()
  return render_template("index.html", items=items)

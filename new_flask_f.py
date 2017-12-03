from flask import Flask,render_template, session, request
from wtforms import SubmitField, TextAreaField, StringField, IntegerField
from wtforms.validators import DataRequired
from flaskk import Food
import os
app = Flask(__name__)
#
class Food_search():
    food_name =StringField("Food_Name ", validators= [DataRequired("Enter your food name")])
    Daily_intake_cal = IntegerField("Calories", validators=[DataRequired("Enter your calories amount")])
    submit = SubmitField("return")


@app.route('/')
def calorie():
    data=[]
    f = Food()
    d= Food_search()
    if request.method == 'POST' and request.method=="GET":
        data.append(f.cal_count(d.Daily_intake_cal))
        data.append(f.user_cal(d.food_name))


    return render_template("index.html", data=data)
@app.route('/home')
def hello():
    return "hello world!"


if __name__ == '_main_':

    app.debug = True
    app.secret_key = 'SuperSecretKey'
    app.run(host=os.getenv('IP', '0.0.0.0'), port=int(os.getenv('PORT', 5000)))

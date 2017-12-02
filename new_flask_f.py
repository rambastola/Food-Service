from flask import Flask,render_template, session, request
#from flaskk import Food
import os

app = Flask(__name__)


@app.route('/')
def calorie():
    if request.method == 'POST' and form.validate():
        #We know that they submitted somethind
        #Hanl
        pass
    if 'totalcal' in session:
        #Ask for another food
        #update totalcal in session
        #f = Food()
        #f.remaining_colories = session['totalcal']
        #do login with class
        #update totalcal
        pass
    else:
        #We know this is the first time coming to the site
        #Ask for calories and begin program
        pass
    #session['totalcal'] = 2000
    #f= Food()
    #for items in f:
    return render_template("index.html")



#if __name__ == '_main_':

app.debug = True
app.secret_key = 'SuperSecretKey'
app.run(host=os.getenv('IP', '0.0.0.0'), port=int(os.getenv('PORT', 5000)))

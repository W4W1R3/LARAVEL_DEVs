from flask import Flask, render_template,request
import pyttsx3
import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore
import africastalking

username = 'sandbox'
api_key = '184ccfe779a18a9a4e603356b65d41432fe2c79b0f671ac7732a9f60dfbe928c'

africastalking.initialize(username, api_key)




app = Flask(__name__)

cred = credentials.Certificate('/home/billie/Documents/HEALTH TECH 29TH JUNE 2023/health/health.json')  # Replace with your own service account key file
firebase_admin.initialize_app(cred,{'projectId': 'accessible-health-connect'})
db = firestore.client()

app.config['SEND_FILE_MAX_AGE_DEFAULT'] = 0

engine = pyttsx3.init()
engine.setProperty('rate', 150)
engine.setProperty('volume', 0.8)


def speak(text):
    engine.say(text)
    engine.runAndWait()


@app.route('/')
def index():

    return render_template('index.html')

@app.route('/speak',methods =['POST'])
def speak_visual_disability():
    speak('visual disability button click to activate')

@app.route('/about')
def disability():
    return render_template('about.html')
def speak_about():
    speak('about')
@app.route('/reminder')
def reminder():

    return render_template('reminder.html')


@app.route('/appointment',methods =['GET','POST'])
def appointment():


    if request.method =='POST':
    # get the form data
        name=request.form.get('name')
        email=request.form.get('email')
        phone=request.form.get('phone')
        date=request.form.get('date')
        time=request.form.get('time')

        # create new document in firestore
        doc_ref = db.collection('appointments').document()
        doc_ref.set({

            'name':name,
            'email':email,
            'phone':phone,
        '    date':date,
            'time':time
    })

    return render_template('appointment.html')

@app.route('/payment')
def payment():
    return render_template('payment.html')

if __name__ == '__main__':
    app.run(debug='true')




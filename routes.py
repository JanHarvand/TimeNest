from flask import render_template, redirect, url_for
from app import app

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login')
def login():
    return render_template('login.html')

@app.route('/signup')
def signup():
    return render_template('signup.html')

@app.route('/calendar')
def calendar():
    return render_template('calendar.html')

from django.shortcuts import render, render_to_response
from django.http import HttpResponse
import requests
from .models import Greeting
import MySQLdb as mdb

# Create your views here.
def index(request):
    # return HttpResponse('Hello from Python!')
    return render(request, 'index.html')

def test(request):
    return HttpResponse(1)

def hello(request):
    
    conn=mdb.connect(host='capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com',user='calvinlee708', passwd='chwb5278',db='capstone')
           
    with conn:
        cursor=conn.cursor()
        cursor.execute("select * from capstone.capstonespeedtest;")
        l=cursor.fetchone()
        
#         if cursor.rowcount==0:
#             raise Http404("Player not found")
#         else:
#             row = cursor.fetchone()
#             context={'pid':row[0]}
#     if "submit" in request.GET:
#         if request.GET["submit"]=="get":
#             return redirect('/player/%s'%(row[0]))      
    return HttpResponse(str(l[1]))

def addresult(request):
    return render(request, 'addresult.php')

def db(request):

    greeting = Greeting()
    greeting.save()

    greetings = Greeting.objects.all()

    return render(request, 'db.html', {'greetings': greetings})


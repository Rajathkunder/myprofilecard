from datetime import datetime
import requests
import webbrowser
import pyjokes

n=int(input("enter how much time(sec) would you chat"))
name=input("ENTER YOUR NAME    :")
print("^^^^^^^^WELCOME ",name.upper(),"START CHATTING WITH YOUR CHATBOT  ^^^^^^^^^^")
count=0
while (count<n):
    message=input("ME :  ")
    if 'hello' in message or 'hi' in message:
        print("BOT: HELLO ",name.upper(),"....HOW ARE YOU ????\n")
    elif 'bye' in message:
        print("BOT: BYE TQ FOR CHATTING :)\n")
        break
    elif 'fine' in message:
        print("BOT:THATS GREAT \n")
    elif 'who' in message and 'you' in message:
        print("BOT: Iam TATA CHATBOT ....IAM NOT AI :( .....made by MR.SR:)\n")
    elif 'what' in message and 'time' in message or 'date' in message:
        now = datetime.now()
        dt_string = now.strftime("%d/%m/%Y %H:%M:%S")
        print("BOT : date and time =", dt_string)
        print("\n")
    elif 'what' in message and 'name' in message:
        print("BOT : MY NAME IS TATA \n")
    elif 'calculations' in message or 'calculate' in message or 'calculation' in message or 'calculator' in message:
        exp=str(input("BOT : PLEASE ENTER EXPRESSION\n"))
        op=str(eval(exp))
        print("BOT : THE RESULT IS -  ",op)
        print("\n")

    elif 'how' in message and 'you' in message:
        print("BOT : IAM FINE THANKS FOR ASKING :)\n")
    elif 'what' in message and 'weather' in message or 'temperature' in message or 'city' in message:
        api_key = "AAAAPPPPIIII_____KKKKEEEEYYYY"  # Enter the API key you got from the OpenWeatherMap website
        base_url = "http://api.openweathermap.org/data/2.5/weather?"

        city_name = input("BOT : Enter city name : ")
        complete_url = base_url + "appid=" + 'd850f7f52bf19300a9eb4b0aa6b80f0d' + "&q=" + city_name  # This is to complete the base_url, you can also do this manually to checkout other weather data available
        response = requests.get(complete_url)
        x = response.json()

        if x["cod"] != "404":
            y = x["main"]

            current_temperature = y["temp"]
            z = x["weather"]

            weather_description = z[0]["description"]

            print("BOT : Temperature (in kelvin unit) = " +
                    str(current_temperature) +
              "\n     description = " +
                    str(weather_description))
            print("\n")
   

        else:
            print("BOT :  City Not Found ")
    elif 'tank' in message and 'you' in message: 
        print("BOT : ITS MY PLEASURE TO HELP YOU :)\n")
    elif 'good' in message or 'nice' in message or 'awesome' in message or 'great' in message:
        print("BOT : THANK YOU FOR YOUR COMPLEMENT :) \n")
    elif 'open' in message and 'google' in message or 'browser' in message or 'chrome' in message:
        print("BOT : OPENING........\n")
        open_google = webbrowser.open('https://google.com')
    elif 'boring' in message or 'bored' in message:
        print("BOT : I WILL TELL YOU A JOKE \n")
        print("loading.......\n")
        
        My_joke = pyjokes.get_joke(language="en", category="neutral")
        print(My_joke)
        print("\n")
  
    else:
        print("BOT: OOPS SOMETHING WENT WRONG :(\n")
    count=count+1
if(count==n):
    print("BOT : OOPS YOUR TURN FINISHED THANK YOU.....VISIT AGAIN:)\n")


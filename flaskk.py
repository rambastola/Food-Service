
import requests, json

class Food:

    def __init__(self):
        self.user2 = int(input("What's your calories take for the day?"))
        self.remaining_colories=0

    def cal_count(self,us):
        self.user=us
        get = requests.get("https://api.edamam.com/search?q=" + us,"&app_id=34e43581&app_key=%20ab719d319c75a45c081aeebdf8d24ec1")
        data = get.content
        pull = json.loads(data)
        items = pull["q"]
        self.food_calories = pull["count"]
        print(items, self.food_calories)
        return self.food_calories  # calories of the food

    def user_cal(self, foodcalories):
        remaining_calories = self.user2 - foodcalories
        while remaining_calories > 0:
            second_food = input("another food")
            b = self.cal_count(second_food)
            remaining_calories = remaining_calories - b
            if remaining_calories <=0:
                print ("You have reached your limit for today")
            else:
                print("Your remaining calories is", remaining_calories)

def main():

    f = Food()
    first_food = input("What food are you going to eat? ")
    a = f.cal_count(first_food)
    f.user_cal(a)
main()

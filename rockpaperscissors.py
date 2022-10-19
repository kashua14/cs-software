import random

choices=['r','p','s']
user_wins=0
computer_wins=0
#three tries for a win
for time in range(3):
    user=input('choose (r)rock, (p)paper, (s)scissors')
    computer=random.choice(choices) #computer chooses randomly
    if user == computer:
        print('the computer chose "{}"'.format(computer))
        print('its a tie!')
        user_wins+=0
        computer_wins+=0
    elif (user=='r' and computer=='p') or (user=='p' and computer=='s') or (user=='s' and computer=='r') :
        print('the computer chose "{}"'.format(computer))
        print('computer wins!')
        user_wins+=0
        computer_wins+=1
    elif (user=='r' and computer=='s') or (user=='p' and computer=='r') or (user=='s' and computer=='p'):
        print('the computer chose "{}"'.format(computer))
        print('you win!')
        user_wins+=1
        computer_wins+=0
    else:
        print('wrong input')
        continue

if computer_wins>user_wins:
    print('computer scored {}'.format(computer_wins))
    print('you scored {}'.format(user_wins))
    print('computer wins!!!!!!')
else:
    print('computer scored {}'.format(computer_wins))
    print('you scored {}'.format(user_wins))
    print('you win!!!!!!')


# Auto clear for testing
import os;os.system('clear')

# Loop lanjut/tidak
def loop():
    while True:
        x = input('lanjut? (y/n)>> ')
        if x in ['y','Y']:
            break
        elif x in ['n','N']:
            exit()
        else:
            print('\n','x'*5,'undefined','x'*5,'\n')
            continue

# Loop input number
def insrt(c):
    while True:
        try:
            a = float(input('first: '))
            print(c)
            b = float(input('second: '))

        except ValueError:
            print('\n','x'*5,'undefined','x'*5,'\n')
            continue
            
        if c == '+':
            return print('result: ',a+b,'\n')
        elif c == '-':
            return print('result: ',a-b,'\n')
        elif c == 'x':
            return print('result: ',a*b,'\n')
        elif c == '/':
            return print('result: ',a/b,'\n')
        else:
            print('\n','x'*5,'undefined','x'*5,'\n')
            break

# Main loop
def main():
    while True:
        print('\nCalculator\n ditambah > +\n dikurangi > -\n dikali > x\n dibagi > /\n','='*15)
        inpt = input('>> ')
        if inpt == '+':
            insrt('+')
        elif inpt == '-':
            insrt('-')
        elif inpt == 'x':
            insrt('x')
        elif inpt == '/':
            insrt('/')
        else:
            print('\n','x'*5,'undefined','x'*5,'\n')
            continue
        loop()
        
# Run code
main()
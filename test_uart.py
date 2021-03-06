import serial 
import RPi.GPIO as GPIO
import mysql.connector as mariadb
import sys

try:
  conn = mariadb.connect(
    user = "thiennc",
    password = "11072001",
    host = "localhost",
    port = 3306,
    database = "embedded"
  )
except mariadb.Error as e:
  print("Error")
  sys.exit()
conn.autocommit = True
cur = conn.cursor()
yellow = 3
green = 5
red = 7
GPIO.setmode(GPIO.BOARD)
GPIO.setup(red,GPIO.OUT)
GPIO.setup(green,GPIO.OUT)
GPIO.setup(yellow,GPIO.OUT)

ser = serial.Serial(
  port = '/dev/serial0',
  baudrate = 9600,
  parity = serial.PARITY_NONE,
  stopbits= serial.STOPBITS_ONE,
  bytesize= serial.EIGHTBITS,
  timeout= 1
)

sql = "UPDATE status SET quality=%s"


try:
  while True:
    s = ser.readline()
    data = s.decode()
    data = data.rstrip()
    if(data != ''):
      data_int = int(data)
      if(data_int<50):
        GPIO.output(green,GPIO.HIGH)
        GPIO.output(red,GPIO.LOW)
        GPIO.output(yellow,GPIO.LOW)
      elif (data_int>50 and data_int <100):
        GPIO.output(red,GPIO.LOW)
        GPIO.output(green,GPIO.LOW)
        GPIO.output(yellow,GPIO.HIGH)
      else:
        GPIO.output(red,GPIO.HIGH)
        GPIO.ouput(green,GPIO.LOW)
        GPIO.output(yellow,GPIO.LOW)
      val = (data,)
      cur.execute(sql,val)
except KeyboardInterrupt:
    ser.close()

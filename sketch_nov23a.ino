#include<string.h>
int digitalPin = 11;
int analogPin = 0;

int val = 0;

void setup() {
  Serial.begin(9600);
}

void loop() {
  if(digitalRead(digitalPin)){
    val = analogRead(analogPin);
    Serial.println(val);
  }

}

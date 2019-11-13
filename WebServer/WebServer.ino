/* 
 Inspired by the code 'WebServer' by David A. Mellis, Tom Igoe, Arturo Guadalupi. And 'SparkFun_HX711_Calibration' by Nathan Seidle of SparkFun Electronics
 create by Dereck Pavez 
 Para encontrar el factor de calibración recomiendo el sigiente repositorio: https://github.com/sparkfun/HX711-Load-Cell-Amplifier/blob/master/firmware/SparkFun_HX711_Calibration/SparkFun_HX711_Calibration.ino.
 */
#include <SPI.h>
#include <Ethernet.h>
#include "HX711.h"
byte mac[] = {
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED
};
IPAddress ip(/*IP*/);//example: ip(192, 168, 0, 1);
EthernetServer server(80);
byte pinData = 2;
byte pinClk = 3;
float factor_calibracion = -130000; //Each sensor has its own calibration factor
HX711 bascula;

void setup() {
  Serial.begin(9600);
  Serial.println("Ethernet WebServer Example");
  Ethernet.begin(mac, ip);
  server.begin();
  bascula.begin(pinData, pinClk);
  bascula.set_scale();
  bascula.tare();
  long zero_factor = bascula.read_average();
  Serial.print("server is at ");
  Serial.println(Ethernet.localIP());
}


void loop() {
  EthernetClient client = server.available();
  bascula.set_scale(factor_calibracion);
  if (client) {
    boolean currentLineIsBlank = true;
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();
        if (c == '\n' && currentLineIsBlank) {
          client.println("HTTP/1.1 200 OK");
          client.println("Content-Type: text/html");
          client.println("Connection: close");
          client.println("Refresh: 2");
          client.println();
          client.println("<!DOCTYPE HTML>");
          client.println("<html>");
          client.println("<head>");
          client.println("<title>Peso</title>");
          client.println("</head>");
          client.println("<body>");
          client.println("<form action=\"https://www.reciclon.tk/formulario.php\" method=\"post\">");
          client.print("<div style=\"margin-top: 10%; display: flex; justify-content: center; align-items: center;\"><h1>Peso: <input name=\"peso\" value=\"");
          client.print(bascula.get_units(), 3);
          client.println("\" style=\"width:150px;height:30px;font-size: 18pt\" readonly> Kgs</h1></div>");
          client.println("<div style=\"display: flex; justify-content: center; align-items: center;\"><input type=\"submit\"></div>");
          client.println("</form>");
          client.println("</body>");
          client.println("</html>");
          break;
        }
        if (c == '\n') {
          currentLineIsBlank = true;
        } else if (c != '\r') {
          currentLineIsBlank = false;
        }
      }
    }
    delay(1);
    client.stop();
  }
}

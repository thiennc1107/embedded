#include <mysql.h>
#include <stdio.h>
#include <stdlib.h> 
#include<unistd.h>
float data;
int main(void)
{
    MYSQL *conn;
    MYSQL_RES *res;
    MYSQL_ROW *row;
    char *server = "localhost";
    char *user = "thiennc";
    char *password = "11072001";
    char *database = "embedded";
    conn = mysql_init(NULL);
    mysql_real_connect(conn,server,user,password,database,0,NULL,0);
    char cmd1[200];
    char cmd2[200];
    int nhietdo1;
    int doam1;
    int nhietdo2;
    int doam2;
    while (1)
    {
        nhietdo1 = rand() %50;
        nhietdo2 = rand() %50;
        doam1 = rand() %50;
        doam2 = rand() %50;
        sprintf(cmd1,"UPDATE `status` SET `nhietdo`=%d,`doam`=%d WHERE STT=1",nhietdo1,doam1);
        mysql_query(conn,cmd1);
        sprintf(cmd2,"UPDATE `status` SET `nhietdo`=%d,`doam`=%d WHERE STT=2",nhietdo2,doam2);
        mysql_query(conn,cmd2);
        sleep(2);

    }
    
    return 0;
}

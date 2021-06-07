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
    while (1)
    {
        nhietdo1 = rand() %50;
        doam1 = rand() %50;
        sprintf(cmd1,"UPDATE `status` SET `speed`=%d,`angle`=%d WHERE STT=1",nhietdo1,doam1);
        mysql_query(conn,cmd1);
        sleep(2);

    }
    
    return 0;
}

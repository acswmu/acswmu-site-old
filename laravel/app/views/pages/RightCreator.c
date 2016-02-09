#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char * args[])
{
	FILE *Correct;
	FILE *FixMe;

	Correct = fopen("meeting.blade.php", "r");
	FixMe = fopen(args[1], "a+");

	char * inputLine[1000];
	int counter;

	while(strncmp(inputLine, "<div id=\"right\">", 14) != 0 && counter < 100)
	{
		counter++;
		fscanf(Correct, "%s", inputLine);
		printf("%s\n", inputLine);
	}


	fclose(Correct);
	fclose(FixMe);	
}

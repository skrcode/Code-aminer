//Tester Program for comparing input and god file

#include<stdio.h>
#include<ctype.h>

int main() {
   FILE *fp1, *fp2;
   int ch1, ch2;
    
   fp1 = fopen("stdout.txt", "r");
   fp2 = fopen("answers.txt", "r");
 
      ch1 = getc(fp1);
      ch2 = getc(fp2);
   //  printf("%c %c\n",ch1,ch2);
     int f = 0;
      while (!((ch1 == EOF) && (ch2 == EOF))) {
         if(ch1!=ch2)f++;
         ch1 = getc(fp1);
         ch2 = getc(fp2);
     //    printf("%c %c\n",ch1,ch2);
      }
  //    printf("%d\n",f);
      if (!f)
         printf("Correct Answer \n");
      else
         printf("Wrong Answer \n");
 
      fclose(fp1);
      fclose(fp2);

      return 0;
}

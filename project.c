#include<stdlib.h>
#include<stdio.h>
#include<unistd.h>
#include<string.h>
int main()
{
int count,j,arrival[40],brust[40],time=3000000,remain[40],k;
static int complete[40];
char p[40][30];
int timeq1=6,timeq2=10,waiting[40],trunaround[40],total_time,average_wait,average_trunaround;
int i,max=1;
int number;
float total_waiting=0,total_trunaround=0;
printf("----------------Put the Arrival time in ascending order------------------\n");
printf("Enter the No of processes:-");
scanf("%d",&count);



for (i = 0; i < count; ++i)
{

fflush(stdin);
printf("\nEnter The arrival time  of process P[%d]:=",i+1);	scanf("%d",&arrival[i]);
fflush(stdin);
printf("\nEnter The brust time of process P[%d]:=",i+1);	scanf("%d",&brust[i]);


}
for (i = 0; i < count; ++i)
{
	if (arrival[i]<time)
	{
		time=arrival[i];
	}
}

for(k = 0; k < 3; ++k)
{
    	if (k==0)

		for ( i = 0; i < count; ++i)
		{

			
			if (time<arrival[i] && remain[i]!=0)
			{
				time=arrival[i];
			}
			if (brust[i]>timeq1)
			{

				remain[i]=brust[i]-timeq1;
				time=time+timeq1;
			}
			else if (brust[i]<=timeq1 )
			{
			time=time+brust[i];
             remain[i]=0;
             complete[i]=time;

			}
			}
		

		if (k==1)
		{
		for ( i = 0; i < count; ++i)
		{
			if (remain[i]>timeq2 && remain[i]!=0)
			{

				remain[i]=remain[i]-timeq2;
				time=time+timeq2;
				complete[i]=time;
			}
			else if (remain[i]<=timeq2 && remain[i]!=0)
			{
			time=time+remain[i];
            remain[i]=0;
            complete[i]=time;
			}

		}
	}
		if (k==2 )
		{
		for (i = 0; i < count; ++i)

		{
         if (remain[i]!=0)
         {

         	max=remain[i];
         	if (max<remain[i])
         	{
         		max=remain[i];

         	}
         }

		}

		for (i = 0; i < count; ++i)
		{

		if (remain[i]==max && remain[i]!=0)
		{

			time=time+remain[i];
			remain[i]=0;
			complete[i]=time;

		}
		}

}
}

   for (i = 0; i < count; ++i)
		{
		 if (remain[i]==0)
		{

			trunaround[i]=complete[i]-arrival[i];
			waiting[i]=trunaround[i]-brust[i];
			if (waiting[i]<=0)
			{
				waiting[i]=0;
			}

		}


		}

	

printf("remain time of p4%d\n",remain[3] );


	printf("-----------------------------project values-------------------------------\n");
	printf("Name    Brust     Arrival  complete   trunaround       waiting\n");

		for (i = 0; i < count; ++i)
		{
		 if (remain[i]==0)
		{

			printf("P[%d]    | %d      |  %d      | %d       |  %d          | %d\n",i+1, brust[i],arrival[i],complete[i],trunaround[i],waiting[i]);
		}


		}


		for (i = 0; i < count; ++i)
		{
		 if (remain[i]==0)
		{

		     number++;
			total_trunaround=(float)total_trunaround+trunaround[i];
            total_waiting=(float)total_waiting+waiting[i];

		}
	}
		// printf("Number of process%f\n",total_trunaround);
		// printf("Number of process%f\n",total_waiting );
		// printf("Number of process%d\n",number );
		printf("\nAverage waiting=%.2f",total_waiting/number);
		printf("\nAverage trunaround=%.2f\n",total_trunaround/number);

	for (i = 0; i < count; ++i)
		{
		 if (remain[i]>0)
		{

		printf("\n process p[%d] is terminated\n",i+1);

		}
	}


	}

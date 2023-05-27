#include <stdio.h>

int main()
{

    int pid[15];
    int bt[15];
    int n;
    printf("Enter the number of processes: ");
    scanf("%d", &n);

    printf("Enter process id of all the processes: ");
    for (int i = 0; i < n; i++)
    {
        scanf("%d", &pid[i]);
    }
    printf("Enter burst time of all the processes: ");
    for (int i = 0; i < n; i++)
    {
        scanf("%d", &bt[i]);
    }

    int i, wt[n];
    wt[0] = 0;

    // calculating waiting time of each process
    for (int i = 1; i < n; i++)
    {
        wt[i] = bt[i - 1] + wt[i - 1];
    }

    printf("Process id burst time watiting time     \t turnaround time\n");
    
    float twt = 0.0;
    float tat = 0.0;

    for (int i = 0; i < n; i++)
    {
        printf("%d\t\t", pid[i]);
        printf("%d\t\t", bt[i]);
        printf("%d\t\t", wt[i]);

        // calculating and printing turnaround time of each process
        printf("%d\t\t", bt[i] + wt[i]);
        printf("\n");

        // for calculating total waiting time
        twt += wt[i];

        // for calculating total turnaround time

        tat += (wt[i] + bt[i]);
    }

    float att, awt;

    // for calculating average waiting time
    awt = twt / n;

    // for calculating average turn around time
    att = tat / n;
    printf("Avg. waiting time = %f\n", awt);
    printf("Avg. turnaround time = %f\n", att);

    return 0;
}
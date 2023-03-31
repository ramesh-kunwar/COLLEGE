#include <stdio.h>

int main()
{

    float x[100], y[100], xp, yp=0,  p;
    int i, j, n;

    printf("Enter number of data: ");
    scanf("%d", &n);
    printf("Enter data:\n");
    for (i = 1; i <= n; i++)
    {
        printf("Enter x: ");
        scanf("%f", &x[i]);
        printf("Enter y: ");
        scanf("%f", &y[i]);
    }
   
    printf("Enter interpolation point: ");
    scanf("%f", &xp);

    for (i = 1; i <= n; i++)
    {
        p = 1;
        for (j = 1; j <= n; j++)
        {
            if (i != j)
            {
                p = p * (xp - x[j]) / (x[i] - x[j]);
            }
        }
        yp = yp + p * y[i];
    }
    printf("ans = %f", yp);

    return 0;
}
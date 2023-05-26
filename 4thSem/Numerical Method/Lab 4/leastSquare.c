#include <stdio.h>

int main()
{

    int numOfData;
    printf("Enter number of data: ");
    scanf("%d", &numOfData);
    float x[10];
    float y[10];

    for (int i = 0; i < numOfData; i++)
    {
        printf("Enter the 7.value of x: ");
        scanf("%f", &x[i]);
        printf("Enter the value of y: ");
        scanf("%f", &y[i]);
        printf("\n");
    }

    // initialize
    float sumx = 0;
    float sumy = 0;
    float sumx2 = 0;
    float sumxy = 0;

    // calculating sum

    for (int i = 0; i < numOfData; i++)
    {
        sumx = sumx + x[i];
        sumy = sumy + y[i];
        sumx2 = sumx2 + x[i] * x[i];
        sumxy = sumxy + x[i] * y[i];
    }

    // calculate a and b
    float a, b;
    b = (numOfData * sumxy - sumx * sumy) / (numOfData * sumx2 - sumx * sumx);
    a = (sumy - b * sumx) / numOfData;

    printf("A = %f\n", a);
    printf("B = %f", b);

    printf("In equation form: \n");
    printf("y = %f + %fx", a, b);

    return 0;
}
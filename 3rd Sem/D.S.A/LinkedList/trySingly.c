#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

struct Node
{
    int data;
    struct Node *next;
};
struct Node *head;

void createList(int num)
{
    int data;
    struct Node *newNode;
    struct Node *temp;
    head = (struct Node *)(malloc(sizeof(struct Node)));
    printf("\nEnter Data: ");
    scanf("%d", &data);
    head->data = data;
    head->next = NULL;
    temp = head;

    for (int i = 1; i < num; i++)
    {
        newNode = (struct Node *)(malloc(sizeof(struct Node)));
        if (newNode == NULL)
        {
            printf("Unable to allocate memory.");
            break;
        }
        else
        {
            printf("Enter the data of node %d: ", i);
            scanf("%d", &data);

            newNode->data = data; // Link data field of newNode with data
            newNode->next = NULL; // Link address field of newNode with NULL

            temp->next = newNode; // Link previous node i.e. temp to the newNode

            temp = temp->next;
        }
    }
}

void insertAtHead(int data)
{
    struct Node *temp;
    head = (struct Node *)(malloc(sizeof(struct Node)));
    // printf("\nEnter Data: ");
    // scanf("%d", &data);
    head->data = data;
    head->next = NULL;
    temp = head;
}

void displayList()
{
    struct Node *temp;

    /*
     * If the list is empty i.e. head = NULL
     */
    if (head == NULL)
    {
        printf("List is empty.");
    }
    else
    {
        temp = head;
        while (temp != NULL)
        {
            printf("Data = %d\n", temp->data); // Print data of current node
            temp = temp->next;                 // Move to next node
        }
    }
}
void main()
{
    int num = 5;
    createList(num);

    displayList();

    printf("-----------------");
    insertAtHead(1000);
    printf("\n New List \n");
    displayList();
    getch();
}

# Queues

- Special type of container that ensures the items are being accessed in FIFO manner
- Queue collections are most appropriate for implementing messaging component

Queue obj = new Queue();

## Example

Queue<string> queue = new Queue<string>();

| Members   | Defination                                                |
| --------- | --------------------------------------------------------- |
| Enqueue() | Add an object to end fo queue                             |
| Dequeue   | Removes obj from beginning of queue                       |
| Peek()    | Return the obj at the beginning of queue without removing |

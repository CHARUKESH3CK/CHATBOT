function getBotResponse(input) {
   // Simple responses
   if (Number(input) == getotp){
        key = 1;
        return "Verification completed!";
    }
    else if(key == 1){
        
        if (input == "What is Recursion?") {
            return "1. Recursion refers to a function calling itself based on a terminating condition. 2. It uses LIFO and therefore makes use of the stack data structure. 3. The next couple of coding interview questions will explore your knowledge of OOPs.";
        } else if (input == "What is an Array?") {
            return "1. An array is commonly referred to as a collection of items stored at contiguous memory locations. 2. Items stored are of the same type.3. It organizes data so that a related set of values can be easily sorted or searched.";
        } else if (input == "What is  Stack?")  {
            return "1. A stack refers to a linear data structure performing operations in a LIFO (Last In First Out) order. 2. In a stack, elements can only be accessed, starting from the topmost to the bottom element.";
        } else if (input == "How can you reverse a string?") {
            return "1. Initiate The string which is to be reversed is declared. 2. Get the length of the string. 3. Start a loop and then swap the position of the array elements. 4. Keep the exchanged positions. 5. Print the reversed string.";
        } else if (input == "What is  Data Structure?") {
            return "A data structure is a storage format that defines the way data is stored, organized, and manipulated.Some popular data structures are Arrays, Trees, and Graphs.";
        } else if (input == "What is LIFO?")  {
            return "1. LIFO is an abbreviation for Last In First Out. 2. It is a way of accessing, storing and retrieving data. 3. It extracts the data that was stored last first.";
        } else if (input == "What is FIFO?") {
            return "1. FIFO stands for First In First Out. 2. It is a way of accessing, storing and retrieving data. 3. The data that was stored first is extracted first.";
        } else if (input == "What is Queue?")  {
            return "1. A queue refers to a linear data structure that performs operations in a FIFO order. 2. In a queue, the least recently added elements are removed first as opposed to a stack. ";
        } else if (input == "What are Binary Trees?") {
            return "1. A binary tree is an extension of the linked list structure where each node has at most two children.  2. A binary tree has two nodes at all times, a left node and a right node. binary-tees";
        } else if (input == "What are the concepts introduced in OOPs?") {
            return "1. Object - A real-world entity having a particular state and behavior. We can define it as an instance of a class. 2. Class - A logical entity that defines the blueprint from which an object can be created or instantiated. 3. Inheritance - A concept that refers to an object gaining all the properties and behaviors of a parent object. It provides code reusability. 4. Polymorphism - A concept that allows a task to be performed in different ways. In Java, we use method overloading and method overriding to achieve polymorphism. 5. Abstraction - A concept that hides the internal details of an application and only shows the functionality. In Java, we use abstract class and interface to achieve abstraction. 6. Encapsulation - A concept that refers to the wrapping of code and data together into a single unit.";
        } else if (input == "Explain what a Binary Search Tree is.")  {
            return "1. A binary search tree is used to store data in a manner that it can be retrieved very efficiently.  2. The left sub-tree contains nodes whose keys are less than the nodes key value. 3. The right sub-tree contains nodes whose keys are greater than or equal to the node’s key value";
        } else if (input == "What is a Graph?") {
            return "1. A graph is a particular type of data structure that contains a set of ordered pairs. 2. The ordered pairs in a graph are also known as edges or arcs and are most commonly used to connect nodes where the data can be stored and retrieved.";
        } else if (input == "What is a Deque?") {
            return "1. A deque is a double-ended queue. 2. This is a structure in which elements can be inserted or removed from either end.";
        } else if (input == "Which sorting algorithm is the best?")  {
            return "1. There are many types of sorting algorithms: bubble sort, quick sort, balloon sort, merge sort, radix sort, and more. 2. No algorithm can be considered as the best or fastest because they have designed each for a specific type of data structure where it performs the best";
        } else if (input == "What are dynamic data structures?") {
            return "Dynamic data structures have the feature where they expand and contract as a program runs. It provides a very flexible method of data manipulation because adjusts based on the size of the data to be manipulated.";
        } else if (input == "How does variable declaration affect memory?")  {
            return "1. The amount of memory that is to be reserved or allocated depends on the data type being stored in that variable. 2. For example, if a variable is declared to be “integer type”, 32 bits of memory storage will then be reserved for that particular variable. ";
        } 
    

        if (input == "hello") {
            return "Hello there!";
        } else if (input == "goodbye") {
            return "Talk to you later!";
        } 
        
            else {
            return "Try asking something else!";
        }
        }
    else{
        key = 0;
        return "Please enter the correct OTP";
    }
    

 

    }

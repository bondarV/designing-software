# Zoo Management System - Programming Principles

## Overview

This project demonstrates how different programming principles are used in the zoo management system. Below, I explain each principle and where it's applied in the code.

## Principles Used

### 1. **DRY (Don’t Repeat Yourself)**
- **What it means**: Don’t repeat the same code in different places.
- **How I used it**: Through process of decoupling in classes `Veterinarian` and `Zookeeper` I stumbled upon repetitive checking of validation that brings to Fail Fast and reduced excessive lines of code which was as opened for me as another logic.
- **Where you can find it**:
    - `WorkHourValidator` class, [lines 7-12](app/Employees/Veterinarian.php#L7-L12)

### 2. **KISS (Keep It Simple, Stupid)**
- **What it means**: Keep the code simple and easy to understand.
- **How I used it**: All types of animals have only logic that could demonstrate main perks of them,what is needed to be demonstrated to understate what is the kind of.
- **Where you can find it**:
    - `BlueJay` by class apply, [line 10](app/Animals/Birds/BlueJay.php#L10)

### 3. **SOLID Principles**
- **S - Single Responsibility Principle**  
  **What it means**: Each class should have one job.
    - **How I used it**: `Zookeeper` manages animals, and `Veterinarian` cares for animals. They have separate roles.
    - **Where you can find it**:
        - `Zookeeper` class, [lines 49-56](app/Employees/Zookeeper.php#L49-L56)
        - `Veterinarian` class, [lines 46-55](app/Employees/Veterinarian.php#L46-L55)
- **O - Open/Closed Principle**  
  **What it means**: Classes should be easy to extend but not change.
    - **How I used it**: The `Animal` class is abstract and can be extended by different animals like `Lion` or `Penguin`, easily used 'is-a' principle .
    - **Where you can find it**:
        - `Animal` class, [lines 10](app/Animals/Animal.php#L6)
- **L - Liskov Substitution Principle**  
  **What it means**: You can replace a parent class with a child class without breaking the code.
    - **How I used it**: `Bird`, `Fish`, and `Mammal` subclasses can be used where `Animal` is expected.
    - **Where you can find it**:
        - `Bird`, `Fish`, `Mammal` subclasses, [lines 13-25](app/Animals/Birds/Bird.php#L13-L25)
- **I - Interface Segregation Principle**  
  **What it means**: Classes shouldn’t be forced to implement methods they don’t need.
    - **How I used it**: The `Flying`, `Swimming`, `Aggression`, and `Affectionate` interfaces are used only by relevant animals.
    - **Where you can find it**:
        - `Flying`, `Swimming` interfaces, [lines 1-7](app/Animals/Interfaces/MainAbility/Swimming.php#L1-L7)
- **D - Dependency Inversion Principle**  
  **What it means**: High-level classes shouldn’t depend on low-level ones; both should depend on abstractions.
  **..Upcoming..**

### 4. **YAGNI (You Aren’t Gonna Need It)**
- **What it means**: Only add features when you really need them.
- **How I used it**: I didn’t add unnecessary features like tracking food consumption(I prepared food logic in advance i left perspective to increase my business logic) because it wasn’t needed right now.
- **Where you can find it**: N/A (feature not added)

### 5. **Composition Over Inheritance**
- **P.S**: Due to run of the time I haven't managed to stable this principle,so I left this reminder to be aware of that moment for future.!!!!!!
- I only used some kind of instance of object to object but this is another story(-has-a)

### 6. **Program to Interfaces, Not Implementations**
- **What it means**: Don’t tie your code to specific implementations; use interfaces instead.
- **Where you can find it**: `Enclosure` instance cannot be created and it restricts implementation and gives open space to broaden code to grow to deepest treasures,even though we will be operate with interface that helps us retrieve main data
    - `Enclosure` interface, [lines 5-10](app/Enclosures/Interfaces/Enclosure.php#L1-L5)

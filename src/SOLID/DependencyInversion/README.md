# Dependency Inversion

By now you understand that all five principles in SOLID are somewhat related, and have some level of overlap.

The Dependency Inversion principle (the "D" in SOLID), the final of the five, states that a logical component/class must
not rely on a concretion, but rather an abstraction.

Following this principle has a number of key advantages:

1. as long as a class conforms to an abstraction, it can change as much as it needs to without causing negative side
   effects;
2. classes depending on an abstraction are not affected by changes mentioned at 1;
3. classes that follow the Dependency Inversion principle are a lot easier to test.

Dependency Inversion promotes what's known as _loose coupling_: where two classes are related to each other while not
being aware of each other's business logic, and where one of these classes can be replaced by a different
one providing the same interface/service as the former.

## Assignment

Picture a desktop computer. It consists of a base component, the motherboard. The motherboard in turn relies on a CPU to
process instructions, (RAM) memory to temporarily store data and keep it readily available, a power supply to make sure
you can actually power it on, and ideally some form of storage.

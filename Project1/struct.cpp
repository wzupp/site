#include <iostream>

using namespace std;

typedef struct
{
	bool home;
	float height;
	char name[5];
	int age;
	char surname[5];
	float weight;
}Person;


typedef struct
{
	bool home;
	char name[5];
	char surname[5];
	int age;
	float height;
	float weight;
}Person1;

#pragma pack(push, 1)
typedef struct
{
	bool home;
	char name[5];
	char surname[5];
	int age;
	float height;
	float weight;
}DisorderedPerson;
#pragma pack(pop)

int main()
{

	Person person;
	Person1 person1;
	DisorderedPerson disorderedperson;
	cout << "size of bool: " << sizeof(person.home) << endl;
	cout << "size of float: " << sizeof(person.height) << endl;
	cout << "size of char: " << sizeof(person.name) << endl;
	cout << "size of int: " << sizeof(person.age) << endl;
	cout << "size of Person: " << sizeof(Person) << endl;
	cout << "size of Person1 " << sizeof(person1) << endl;
	cout << "size of DisorderedPerson: " << sizeof(DisorderedPerson) << endl;
	cout << "sum of fields in Person struct  : " << sizeof(person.home) + sizeof(person.height) + sizeof(person.name) + sizeof(person.age) + sizeof(person.surname) + sizeof(person.weight) << endl;
	cout << "sum of fields in DisorderedPerson struct  : " << sizeof(person.home) + sizeof(person.height) + sizeof(person.name) + sizeof(person.age) + sizeof(person.surname) + sizeof(person.weight) << endl;
	cout << &person.home << " bool" << " " << endl;
	cout << &person.name << " char" << " " << endl;
	cout << &person.surname << " char" << " " << endl;
	cout << &person.age << " int" << " " << endl;
	cout << &person.height << " float" << " " << endl;
	cout << &person.weight << " float" << " " << endl;

	cout << &person1.home << " bool" << " " << endl;
	cout << &person1.name << " char" << " " << endl;
	cout << &person1.surname << " char" << " " << endl;
	cout << &person1.age << " int" << " " << endl;
	cout << &person1.height << " float" << " " << endl;
	cout << &person1.weight << " float" << " " << endl;

	cout << &disorderedperson.home << " bool" << " " << endl;
	cout << &disorderedperson.name << " char" << " " << endl;
	cout << &disorderedperson.surname << " char" << " " << endl;
	cout << &disorderedperson.age << " int" << " " << endl;
	cout << &disorderedperson.height << " float" << " " << endl;
	cout << &disorderedperson.weight << " float" << " " << endl;

	return 0;
}

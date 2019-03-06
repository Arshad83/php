

# solid principle


## Bad Code
	- F : Fragility: Easy to break
	- R : Rigidity : Hard to change
	- I : Immobility: Hard to reuse
	- v : viscosity: Hard to do the right thing


## Good Code
	- S : Single Responsibility
	- O : Open/closed
	- L : Liskov Substitution
	- I : Interface Segragation
	- D : Dependency Inversion

	with "SOLID" code is easy to read,maintainable, and Legible

- **SRP** 
	- There should never be more than one reason for a class to change.
	**cohension**
		- Degree to which the elements of a module belong together.
		- variables and methods to achieve the responsibility. only methods and variables are related to class intension.
	**Coupling**
		- Degree of interdependence between software modules.
- **OCP**
	- Software entities- Such as classes, modules functions and so on - should be open 
		for extension but closed for modification.
		- HOW to OCP
			- Abstract class
			- Interface
- **LSP**
	- subtypes must be substitutable for their base types.
-**ISP**
	- Clients should not be forced to depends on methods they don't use.
	 How to perform ISP. 
	 - Public class(normal class or abstract class)
	 - Interface 
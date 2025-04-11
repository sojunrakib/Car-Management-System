Step-by-Step To-Do for Vehicle Listing Application:

1. Setup the Project Structure
   Create the folder structure as mentioned in the project requirements.

2. Implement Core Components

# FileHandler Trait

Create a trait to handle JSON file operations for reading and writing.

# VehicleActions Interface

Define methods: addVehicle, editVehicle, deleteVehicle, getVehicles.

# VehicleBase Abstract Class

Include shared properties like name, type, price, and image.
Define an abstract method getDetails.

# VehicleManager Class

Use the FileHandler trait.
Extend the VehicleBase class.
Implement the VehicleActions interface.

3. JSON File Management
   Create a vehicles.json file in the data/ folder.
   Ensure it contains initial data for 2–3 vehicles.

4. Develop Frontend Views

# Header

Create reusable components for the header.

# Add Vehicle Page

Add a form to input vehicle details and save them using the addVehicle method.

# Edit Vehicle Page

Create a form pre-filled with vehicle data to update details using the editVehicle method.

# Delete Vehicle Page

Confirm deletion and remove the vehicle using the deleteVehicle method.

# Index Page

List all vehicles in a Bootstrap card layout.
Add buttons to edit or delete vehicles.

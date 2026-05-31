# MERN CRUD Project

This project is a simple MERN (MongoDB, Express, React, Node.js) application that allows users to perform CRUD (Create, Read, Update, Delete) operations on student records.

## Project Structure

```
mern-crud/
├── backend/
│   ├── server.js          # Entry point for the backend application
│   ├── db.js              # MongoDB connection setup
│   ├── models/
│   │   └── Student.js     # Mongoose schema for Student
│   └── routes/
│       └── studentRoutes.js # API routes for student management
├── frontend/
│   └── src/
│       ├── App.js         # Main component of the React frontend
│       ├── components/
│       │   ├── AddStudent.js # Component for adding a new student
│       │   └── StudentList.js # Component for displaying the list of students
│       └── index.js       # Entry point for the React application
└── README.md              # Project documentation
```

## Getting Started

### Prerequisites

- Node.js
- MongoDB

### Installation

1. Clone the repository:

   ```
   git clone <repository-url>
   cd mern-crud
   ```

2. Navigate to the backend directory and install dependencies:

   ```
   cd backend
   npm install
   ```

3. Set up your MongoDB database. Make sure MongoDB is running on your local machine.

4. Start the backend server:

   ```
   node server.js
   ```

5. Navigate to the frontend directory and install dependencies:

   ```
   cd ../frontend
   npm install
   ```

6. Start the React application:

   ```
   npm start
   ```

### Usage

- You can add a new student by filling out the form in the frontend and clicking the "Add" button.
- The list of students will be displayed below the form.
- You can delete a student by clicking the "Delete" button next to their name.

### License

This project is open-source and available under the MIT License.
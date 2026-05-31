const express = require("express");
const router = express.Router();
const Student = require("../models/Student");

// CREATE
router.post("/add", async (req, res) => {
    const student = new Student(req.body);
    await student.save();
    res.send("Student Added");
});

// READ
router.get("/", async (req, res) => {
    const data = await Student.find();
    res.json(data);
});

// UPDATE
router.put("/update/:id", async (req, res) => {
    await Student.findByIdAndUpdate(req.params.id, req.body);
    res.send("Updated");
});

// DELETE
router.delete("/delete/:id", async (req, res) => {
    await Student.findByIdAndDelete(req.params.id);
    res.send("Deleted");
});

module.exports = router;
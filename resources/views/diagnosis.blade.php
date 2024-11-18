@extends('layout.main')
@section('content')
   <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Diagnosis</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Diagnosis</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Diagnosis Form Section with Background Image Start -->
    <div class="container-fluid py-5" style="
        background-image: url('img/diagnosis.svg');
        background-size: cover;
        background-position: center;
    ">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-10 mx-auto">
                    <div class="section-title mb-5 text-center">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Diabetes Diagnosis</h5>
                        <h1 class="display-5 mb-0">Please Fill Out the Form for a Preliminary Diabetes Diagnosis</h1>
                    </div>
                    <!-- Form Container -->
                    <div class="p-4 bg-white rounded shadow" style="background-color: white;">
                        <form>
                            <!-- Personal Information -->
                            <h3 class="text-primary mb-3">Personal Information</h3>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="Enter your age" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <!-- Additional Fields for Weight, Blood Sugar, and Blood Pressure -->
                                <div class="col-md-6">
                                    <label for="height_cm" class="form-label">Height (cm)</label>
                                    <input type="number" class="form-control" id="height_cm" placeholder="Enter your height in cm" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="weight_kg" class="form-label">Weight (kg)</label>
                                    <input type="number" class="form-control" id="weight_kg" placeholder="Enter your weight in kg" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="blood_sugar" class="form-label">Blood Sugar (mg/dL)</label>
                                    <input type="number" class="form-control" id="blood_sugar" placeholder="Enter your blood sugar level" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="blood_pressure" class="form-label">Blood Pressure (mmHg)</label>
                                    <input type="text" class="form-control" id="blood_pressure" placeholder="Enter your blood pressure (e.g., 120/80)" required>
                                </div>
                            </div>

                            <!-- Lifestyle Questions -->
                            <h3 class="text-primary mt-4 mb-3">Lifestyle Questions</h3>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Do you have a history of smoking?</label>
                                    <div>
                                        <input type="radio" class="btn-check" name="smoking" id="smoking_yes" value="yes" required>
                                        <label class="btn btn-outline-primary" for="smoking_yes">Yes</label>

                                        <input type="radio" class="btn-check" name="smoking" id="smoking_no" value="no" required>
                                        <label class="btn btn-outline-primary" for="smoking_no">No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Hypertension?</label>
                                    <div>
                                        <input type="radio" class="btn-check" name="hypertension" id="hypertension_yes" value="yes" required>
                                        <label class="btn btn-outline-primary" for="hypertension_yes">Yes</label>

                                        <input type="radio" class="btn-check" name="hypertension" id="hypertension_no" value="no" required>
                                        <label class="btn btn-outline-primary" for="hypertension_no">No</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Is there a history of heart disease?</label>
                                    <div>
                                        <input type="radio" class="btn-check" name="heart_disease" id="heart_disease_yes" value="yes" required>
                                        <label class="btn btn-outline-primary" for="heart_disease_yes">Yes</label>

                                        <input type="radio" class="btn-check" name="heart_disease" id="heart_disease_no" value="no" required>
                                        <label class="btn btn-outline-primary" for="heart_disease_no">No</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Diagnosis Form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Diagnosis Form Section End -->
@endsection

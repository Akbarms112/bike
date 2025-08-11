import React from 'react';

const Gallery: React.FC = () => {
  const categories = [
    { label: "Bike Wash", image: "https://5.imimg.com/data5/TF/FD/MY-25155805/bike-cleaning-service-500x500.jpg" },
    { label: "Bike Pickup", image: "https://5.imimg.com/data5/SELLER/Default/2023/8/332801597/HI/ZW/NO/43783092/bike-transport-service-500x500.jpg" },
    { label: "Bike Drop", image: "https://5.imimg.com/data5/XR/NB/GLADMIN-48651030/bike-washing-service-500x500.png" },
    { label: "Bike care", image: "https://quickinsure.s3.ap-south-1.amazonaws.com/uploads/static_page/f875c16c-74ce-4a6c-9939-bfa9d018e63f/5%20Bike%20Maintenance%20Tips%20To%20Make%20Your%20Bike%20New%20Again.png" },
    { label: "Customers Expectations", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD-NzxrRevGEKIheNwsoWVRw7DgMeRq3vJxA&s" },
    { label: "Teams", image: "https://enformhr.com/wp-content/uploads/2024/10/positive-feedback-improves-performance.jpg" },
    { label: "Fast Growing from people", image: "https://inc42.com/wp-content/uploads/2017/04/Bike_Cleanse_High_Res_025-1.jpg" },
    { label: "Trusted Zone", image: "https://door2doorcarwash.com/inside/images/project/bike_project-4.webp" },
    { label: "Waterless Wash & Interior Cleaning", image: "https://wp.driveu.in/wp-content/uploads/2023/09/Dashboard-Dressing.png" },
    { label: "Pressure Wash & Interior Cleaning", image: "https://wp.driveu.in/wp-content/uploads/2023/09/Exterior-Foam.png" },
    { label: "Antiques & Collectibles", image: "https://5.imimg.com/data5/ZQ/DQ/WM/SELLER-27223723/car-and-bike-washing-service.jpg" }
  ];

  const scrollToCategories = () => {
    document.getElementById("categories")?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <div>
      <div className="hero">
        <div className="hero-content">
          <h1>SIMPLY ART. SIMPLY BEAUTIFUL.</h1>
          <p>For seventeen years, artists and buyers have trusted us to show and sell their art. Are you next? Join now.</p>
          <div className="search-bar">
            <h3 onClick={scrollToCategories} style={{ cursor: 'pointer' }}>
              Explore more!
            </h3>
          </div>
        </div>
      </div>

      <section className="categories" id="categories">
        <h2>Categories</h2>
        <div className="grid">
          {categories.map((category, index) => (
            <div key={index} className="category-card">
              <img src={category.image} alt={category.label} />
              <div>{category.label}</div>
            </div>
          ))}
        </div>
      </section>
    </div>
  );
};

export default Gallery;
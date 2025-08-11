import React from 'react';

const Services: React.FC = () => {
  const services = [
    {
      title: "Basic Wash",
      description: "A thorough exterior wash to remove dirt and grime.",
      price: "$15"
    },
    {
      title: "Premium Wash", 
      description: "Includes chain degreasing, polishing, and detailed cleaning.",
      price: "$25"
    },
    {
      title: "Pickup & Delivery",
      description: "We pick up, clean, and deliver your bike back to you.",
      price: "$35"
    }
  ];

  return (
    <section className="services">
      <h2>Our Services</h2>
      <div className="service-container">
        {services.map((service, index) => (
          <div key={index} className="service">
            <h3>{service.title}</h3>
            <p>{service.description}</p>
            <p className="price">{service.price}</p>
          </div>
        ))}
      </div>
    </section>
  );
};

export default Services;
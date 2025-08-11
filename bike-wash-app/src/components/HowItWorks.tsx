import React from 'react';

const HowItWorks: React.FC = () => {
  const steps = [
    {
      title: "Book a Service",
      description: "Select your service and schedule a convenient time."
    },
    {
      title: "We Pick Up",
      description: "Our dedicated team promptly arrives to collect your bike."
    },
    {
      title: "Wash & Delivery",
      description: "Expert bike cleaning with easy pick-up and fast delivery."
    }
  ];

  return (
    <section className="how-it-works">
      <h2>How It Works</h2>
      <div className="steps">
        {steps.map((step, index) => (
          <div key={index} className="step">
            <h3>{step.title}</h3>
            <p>{step.description}</p>
          </div>
        ))}
      </div>
    </section>
  );
};

export default HowItWorks;
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "react-responsive-carousel/lib/styles/carousel.min.css"; // requires a loader
import { Carousel } from 'react-responsive-carousel';
import "./DemoCarousel.css"

function DemoCarousel() {
        return (
            <Carousel>
                    <div className='osoba'>
                        <img src="https://previews.123rf.com/images/burlingham/burlingham1310/burlingham131000159/22665059-handsome-young-black-man-smiling-horizontal.jpg" />
                        <h4>Marko Markić, dr. vet. med.</h4>
                    </div>
                    <div className='osoba'>
                        <img src="https://i.pinimg.com/originals/d7/ed/81/d7ed8106ea7a15151abd200b2abb1599.jpg" />
                        <h4>Ana Anić, dr. vet. med.</h4>
                    </div>
                    <div className='osoba'>
                        <img src="https://media.istockphoto.com/photos/portrait-of-a-man-picture-id155360935" />
                        <h4>Stipe Stipić, veterinarski tehničar</h4>
                    </div>
                    <div className='osoba'>
                        <img src="https://t4.ftcdn.net/jpg/03/83/25/83/360_F_383258331_D8imaEMl8Q3lf7EKU2Pi78Cn0R7KkW9o.jpg" />
                        <h4>Mira Mirić, veterinarski tehničar</h4>
                    </div>
            </Carousel>
        );
}

export default DemoCarousel;

if (document.getElementById('demo-carousel')) {
    ReactDOM.render(<DemoCarousel />, document.getElementById('demo-carousel'));
}
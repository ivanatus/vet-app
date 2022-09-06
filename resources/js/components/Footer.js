import React from 'react';
import ReactDOM from 'react-dom';
import "./Footer.css"

function Footer() {
    return (
        <div className="main-footer">
            <p>
                &copy;2022 Pet Wellness Centar | All rights reserved
            </p>
        </div>
    );
}

export default Footer;

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}

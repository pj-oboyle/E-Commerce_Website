# DC Comics Online - E-Commerce Website

This project is a fully functional web application designed to provide a seamless shopping experience for comic book enthusiasts. The site features dynamic product displays, user authentication, a robust shopping cart system, and promotional tools like carousels and newsletters. Below, you will find an overview of the project's unique features, technologies, and usage instructions.

---

## Features

### **1. Dynamic Product Display**
- **Responsive Card Deck**:
  - Displays a grid of comic book products with dynamically populated titles and prices.
  - Features hover effects such as border highlights, box shadows, and scaling for improved user interactivity.
- **Add-to-Basket and Remove-from-Basket Buttons**:
  - Each product card includes buttons to add or remove items from the basket.

### **2. Shopping Basket Functionality**
- **Persistent Basket State**:
  - Items added to the basket are saved using `localStorage`, allowing the basket to persist across page reloads.
- **Side Basket Panel**:
  - A collapsible side panel displays selected items, quantities, and the total cost in real-time.
  - Includes features to dynamically update totals and remove items.
- **Dynamic Total Calculation**:
  - Calculates and updates the basket total using the `updateBasket()` function, ensuring accurate order summaries.
- **Empty Basket Option**:
  - A dedicated button clears all items from the basket with a confirmation alert.

### **3. User Authentication**
- **Login Modal**:
  - Validates user credentials against a database (`userLogin` table).
  - Displays user-specific elements like basket totals and greetings upon successful login.
- **Session-Based User Management**:
  - Tracks login state using `sessionStorage`, enabling user-specific functionality.
- **Logout Functionality**:
  - Clears session data, hides user-related elements, and displays a logout confirmation.

### **4. Carousel with Randomized Start**
- **Dynamic Promotions**:
  - A Bootstrap-based carousel featuring promotional banners with captions such as "Free Shipping" and "Reward Points."
- **Randomized Slide Selection**:
  - JavaScript script selects a random slide as the starting image on page load for variety.

### **5. Reusable Alert Modal**
- **Customizable Feedback**:
  - Displays dynamic messages for login prompts, successful purchases, subscription confirmations, and errors.
- **Randomized Visuals**:
  - Includes a feature to display one of three Justice League-themed GIFs when triggered, enhancing user experience.

### **6. Newsletter Subscription**
- **Email Validation**:
  - Validates email addresses using a regex pattern before subscription.
- **Alert Modal Integration**:
  - Provides feedback (success or error) via the alert modal with custom text and a random GIF.

### **7. Database Integration**
- **Comic Book Data**:
  - Products are dynamically retrieved from the `comicBooks` database table.
  - Includes information such as title, issue number, price, and stock.
- **User Login Data**:
  - Validates user credentials using the `userLogin` database table.

### **8. Payment and Checkout**
- **Payment Modal**:
  - A Bootstrap-based modal for entering payment details (e.g., card number, CVC).
  - Dynamically displays the basket total during checkout.
- **Confirmation and Cleanup**:
  - Displays a success message after checkout and clears the basket.

### **9. Responsive Design and Accessibility**
- **Responsive Layout**:
  - Uses Bootstrap grid classes to ensure compatibility across devices and screen sizes.
- **Hover Effects and Animations**:
  - Adds interactivity to buttons, images, and other elements with hover effects and animations.

### **10. Styling**
- **Custom CSS**:
  - Modular and reusable styles for various components, including the navbar, footer, and modals.
- **Thematic Design**:
  - Consistent color scheme based on DC Comics branding (e.g., `#294561` for headers and footers).

---

## Technologies Used

### **Frontend**
- HTML5, CSS3, JavaScript
- Bootstrap 4.6 for responsive design
- FontAwesome for icons

### **Backend**
- PHP for server-side logic
- MySQL for database management

### **Database**
- `comicBooks` table:
  - Stores product data (e.g., titles, prices, stock levels).
- `userLogin` table:
  - Stores user credentials for authentication.

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/pj-oboyle/E-Commerce_Website.git
   ```
2. Set up a local web server (e.g., XAMPP, WAMP) and place the project folder in the `htdocs` directory.
3. Import the `g00398242.sql` file into your MySQL database to set up the necessary tables and sample data.
4. Update the database credentials in `connectToComicDB.php` to match your local database configuration.
5. Start your web server and access the site at `http://localhost/E-Commerce_Website`.

---

## Usage

### **1. Browsing Products**
- Navigate to the homepage to view the catalog of comic books.
- Use the "Add to Basket" button or click on product images to add items to your shopping cart.

### **2. User Login**
- Log in using one of the pre-configured user accounts:
  - Username: `user` | Password: `pass`
  - Username: `pj` | Password: `1234`
- Upon login, you can:
  - View your basket total in the navbar.
  - Access user-specific menu options (e.g., account, orders).

### **3. Checkout**
- Open the side basket to view selected items and their total.
- Click on product images to remove selected items from your shopping cart.
- Click "Place Order" to proceed to the payment modal.
- Enter payment details (e.g., card number, expiration date) and confirm your order.

### **4. Additional Features**
- The website is fully responsive, ensuring compatibility and proper functionality across various devices and screen sizes.
- The newsletter subscription includes email validation to ensure accurate input.
- Alert modals provide feedback for actions such as login, purchases, and errors.

---

## Future Improvements

1. **Enhanced Payment Validation:**
   - Implement real-time validation for payment details in the checkout process.
2. **Order History:**
   - Add a database table to store and display past orders for logged-in users.
3. **Search and Filtering:**
   - Include a search bar and filters for easier product navigation.

---

## License
This project is open-source and available under the [MIT License](LICENSE).

---

## Contact
For any questions or feedback, feel free to contact:
- Email: [pj-oboyle]
- GitHub: [pj-oboyle](https://github.com/pj-oboyle)

---

hank you for exploring this project! If you found it helpful, please give it a star on GitHub.


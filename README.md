# Vineyard Properties - Quick Guide

## How to Add or Edit Property Listings

1. **Open `data/properties.php`**
   - Each property is an array containing:
     - `id` (number, unique)
     - `title` (short name)
     - `image` (URL)
     - `location` (e.g. Nairobi)
     - `price` (number only, no commas)
     - `description` (1-2 sentences)
     - `category` (e.g. House, Apartment, Land, Commercial)
     - `type` ("Rent" or "Sale")

2. **To add a new property:**
   - Copy an existing block (between [ and ] including the commas) and paste it below, beside or after the last entry in the array.
   - Change the fields as needed (set a new id, update picture, etc).

3. **To edit a property:**
   - Change any field of that property. Make sure the syntax matches the other entries (commas, quotes).

4. **To remove a property:**
   - Delete that property’s block (including brackets and trailing comma if present).

5. **Save the file.**
   - Listings will update automatically on `listings.php` and the homepage (if connected).

---

## How to Change the Logo
- Replace `assets/logo.svg` with your own SVG (keep the filename or update the `<img src="...">` links in HTML/PHP accordingly).

## How to Update Images
- Use links to images (for now, ideally HTTPS). You can use your own image URLs or upload to an image host.

## How to Use the Filters
- Use the filter form on `listings.php` to narrow results by category, location, or price.

---

Feel free to ask for help on any step!

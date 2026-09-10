# ☕Chai Adda — Dynamic Cafe Web App

> A lightweight, full-stack cafe management system and customer storefront developed for **The Chai Adda**.

🌐 **Live Deployment:** [Launch The Chai Adda Live Demo](https://chaiadda.site.je/)  
🔐 **Admin Portal:** [Access Staff CMS](https://chaiadda.site.je/admin/login.php)
---

## 📸 Key Features

* **Interactive Counter Menu:** Real-time client-side category filtering across Chai, Vada Pav, Coffee, and Snacks with dynamic badge tagging (e.g., *Bestseller*, *Chef Choice*).
* **Deals & Combo Engine:** Dynamic ongoing specials and combo bundles with active/inactive display toggles.
* **Staff Administration Dashboard:** Authenticated control panel allowing staff to add, delete, and modify menu items and deals.
* **Direct Media Pipeline:** Integrated file upload handler storing item and combo photos directly to disk with database record association.
* **Discrete Access Point:** Staff login route discreetly integrated into the footer aesthetics.
* **Responsive Presentation:** Warm earthenware and caramel color identity built with Tailwind CSS, adapted for desktop and mobile viewports.

---

## 🛠️ Tech Stack

* **Frontend:** HTML5, Tailwind CSS
* **Backend:** PHP 8.x (Session authentication, native file handling)
* **Database:** MySQL via PHP Data Objects (PDO) with prepared statements
* **Hosting Platform:** InfinityFree (Apache / Linux environment)

---

## 📁 Project Structure

```text
cafe_website/
├── admin/
│   ├── dashboard.php     # Administrative panel (menu & deals management)
│   ├── login.php         # Secure staff authentication portal
│   └── logout.php        # Session termination handler
├── images/               # Core static visual assets & branding
├── uploads/              # Dynamic storage for user-uploaded food & deal photos
├── cafe_db.sql           # Database schema & initial dataset
├── db.php                # Active PDO database configuration (git-ignored)
├── db.example.php        # Template database connection file
├── index.php             # Public-facing dynamic storefront & counter
└── README.md             # Project documentation

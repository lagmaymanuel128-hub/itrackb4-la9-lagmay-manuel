# ITRACKB4 LA9: Your Own Table, Your Own Model
Name: Manuel T. Lagmay Jr.  Block: 4A

**F1. Which column did you make nullable, and why that one?**
I made `description` nullable. `name`, `main_ingredient` and `origin` are
required by my create form, and `spice_level` and `is_vegetarian` have
defaults, so `description` is the only column a dish can be saved without.

**F2. Which step failed first, and what did the error say?**
In step 3 for having error

**F3. You changed no Blade file, yet your pages still work. Why?**
My views only use `$dishes` and `$dish` and read fields like `->name` and
`->origin`. The controller still passes variables with those same names,
and Eloquent models expose the same fields, so the Blade files can't tell
the data now comes from the database instead of the JSON file.

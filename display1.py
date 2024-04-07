import tkinter as tk

# Function to update LCD text (simulated)
def update_lcd(text):
    print("LCD Display:", text)

# Function to handle button click event
def button_clicked():
    text = entry.get()
    update_lcd(text)

# Create GUI
root = tk.Tk()
root.title("16x2 I2C LCD Display (Simulated)")

label = tk.Label(root, text="Enter text:")
label.pack()

entry = tk.Entry(root, width=20)
entry.pack()

button = tk.Button(root, text="Display on LCD", command=button_clicked)
button.pack()

root.mainloop()

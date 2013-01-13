import pygtk 
pygtk.require("2.0") 
import gtk
def first_window():
    label_1 = gtk.Label("Hello World!") 
    label_2 = gtk.Label("Still in the HBox") 
    b1=gtk.Button('gsdfg')
    button = gtk.Button("This button is in the Vertical Box")
    vbox = gtk.VBox() 
    hbox = gtk.HBox()
    hbox.pack_start(label_1)
    hbox.pack_start(label_2)
    hbox.pack_start(b1)
    # Add the hbox as the first item in the vertical box that was
    # created above 
    vbox.pack_start(hbox)
    # Add the button as the next item in the vertical box. 
    vbox.pack_start(button)
    win = gtk.Window()
    win.add(vbox)
    win.show_all()
first_window()
gtk.main()

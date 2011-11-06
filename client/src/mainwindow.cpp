#include "mainwindow.h"
#include "ui_mainwindow.h"

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    ui->webView->load(QUrl("page/main.html"));
    QWebSettings::enablePersistentStorage();
    QShortcut *shortcut = new QShortcut(QKeySequence(tr("F11", "FullScreen")),
                              this);
    connect(shortcut,SIGNAL(activated()),SLOT(toFullScreen()));
}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::toFullScreen()
{
    if(this->isFullScreen()){
        this->showNormal();
    }else{
        this->showFullScreen();
    }
}

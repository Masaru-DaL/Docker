from flask import render_template
from flask_appbuilder.models.sqla.interface import SQLAInterface
from flask_appbuilder import BaseView, expose, has_access, ModelView, ModelRestApi

from . import appbuilder, db


class MyView(BaseView):

    route_base = "/myview"

    @expose('/method1/<string:param1>')

    def method1(self, param1):
        # do something with param1
        # and return to previous page or index

        return param1

    @expose('/method2/<string:param1>')
    def method2(self, param1):
        # do something with param1
        # and render it
        param1 = 'Hello %s' % (param1)
        return param1


appbuilder.add_view_no_menu(MyView())

db.create_all()

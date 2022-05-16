<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> FRAX score </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            การพิจารณาค่าจุดตัดที่ถือเป็นข้อบ่งชี้ในการเริ่มใช้ยารักษาโรคกระดูกพรุน
            <br />
            - โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ ≥ 20 % <br />
            - โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก ≥ 3 %<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <iframe
            id="if1"
            width="100%"
            height="500"
            style="visibility: visible"
            src="https://www.sheffield.ac.uk/FRAX/tool.aspx?lang=th"
          >
          </iframe>
        </v-card-text>
        <v-card-text>
          <h3 class="textlabel mb-2">- ดัชนีมวลกาย</h3>
          <v-text-field
            outlined
            dense
            v-model="frax1"
            label="bmi..."
          ></v-text-field>
          <h3 class="textlabel mb-2">
            - โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ
          </h3>
          <v-text-field outlined dense v-model="frax2" label="ร้อยละ... ">
          </v-text-field>
          <h3 class="textlabel mb-2">- โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก</h3>
          <v-text-field outlined dense v-model="frax3" label="ร้อยละ...">
          </v-text-field>

          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_frax">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Frax-Score',
  data() {
    return {
      frax1: '',
      frax2: '',
      frax3: '',
    }
  },
  methods: {
    save_frax() {},
  },
}
</script>
